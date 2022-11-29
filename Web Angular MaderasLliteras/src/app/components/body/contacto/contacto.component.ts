import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators   } from '@angular/forms';
import {ActivatedRoute} from '@angular/router';

declare let L;

import {GralSeverService } from '../../../services/gral-sever.service';
import { ArticulosService } from '../../../services/articulos.service';

import { Observable } from 'rxjs';

@Component({
  selector: 'app-contacto',
  templateUrl: './contacto.component.html',
  styleUrls: ['./contacto.component.css']
})
export class ContactoComponent implements OnInit {

  message: FormGroup;
  submitted = false;
  product_id = "";
  submit_text = "Enviar Consulta";

  artdatail:Observable<any[]>;
  contacto:Observable<any[]>;

  constructor( private gralService: GralSeverService, private artService: ArticulosService, private route:ActivatedRoute) { }

  ngOnInit(): void {
    window.scroll(0,0);
    
    const map = L.map('map').setView([-31.56597, -68.52653],16);
    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
        maxZoom: 18
    }).addTo(map);

    L.control.scale().addTo(map);
    let marker = L.marker([-31.56592, -68.52699]).addTo(map).bindPopup("Lliteras Placas y Maderas");

    this.contacto = this.gralService.getContacto();

    this.product_id = this.route.snapshot.paramMap.get('id');

    this.message = new FormGroup({
      nombre: new FormControl('', Validators.required),
      email: new FormControl('', Validators.required),
      motivo: new FormControl('', Validators.required),
      consulta: new FormControl('', Validators.required)
    });

    if(this.product_id != null){
      //console.log(this.product_id );
      let consulta = "Hola! Quiero consultar por el artículo " + this.product_id;
      this.message.controls.consulta.setValue(consulta);
    }

    
    
  }

  onSubmit(){
    this.submitted = true;

    if(this.message.valid){
      //console.log(this.message.value);
      this.submit_text = "Enviando....";
      this.artService.sendMail(this.message.value).subscribe(
        (resp:any) => {
          //console.log(resp);
          if(resp.error == 'ok'){
            alert("Mensaje enviado correctamente");
            this.message.reset();
            this.submitted = false;
          }
          if(resp.error == 'error'){
            alert("Ocurrio un error, por favor intentalo mas tarde!");
          }
          this.submit_text = "Enviar Consulta";

      });

    }
    //this.form.reset();
  }

}
