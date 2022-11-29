import { Component, OnInit } from '@angular/core';
import {ActivatedRoute} from '@angular/router';
import {Router} from '@angular/router';

import { environment } from '../../../../environments/environment';
import { Observable } from 'rxjs';

import { ArticulosService } from '../../../services/articulos.service';

interface datail{
  specs: string,
  related:string,
  error: string
}

@Component({
  selector: 'app-detalleproducto',
  templateUrl: './detalleproducto.component.html',
  styleUrls: ['./detalleproducto.component.css']
})
export class DetalleproductoComponent implements OnInit {

  product_id = "";

  product_specs = [];
  

  URL = environment.URL;
  artdatail:Observable<any[]>;
  related_products:Observable<any[]>;

  constructor(private route:ActivatedRoute, private artService: ArticulosService, private router: Router) { 
    // force route reload whenever params change;
    this.router.routeReuseStrategy.shouldReuseRoute = () => false;
  }

  ngOnInit(): void {
    window.scroll(0,0);

    this.product_id = this.route.snapshot.paramMap.get('id');
    //this.product_datail = this.artService.getProductDetail(this.product_id)[0];

    this.artdatail = this.artService.getDetail(this.product_id);
    this.related_products = this.artService.getRelated();

    /*this.artService.getDetail(this.product_id).subscribe(
      (resp:any) => {
        //console.log(resp);
        if(resp.error == 0){
          this.product_datail = resp.data;
          this.related_products = resp.related;
          this.product_specs = resp.specs;
          //console.log(this.product_datail);
        }
        if(resp.error == 1){
          //console.log("error");
          this.router.navigate(['/categorias']);
        }
    });*/
  }

  mail(articulo){
    //console.log(articulo);
    articulo = articulo.replace(/[/]/g, '-');
    this.router.navigate(['/contacto/'+articulo]);
  }

}
