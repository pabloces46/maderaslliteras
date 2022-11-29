import { Component, OnInit } from '@angular/core';
import {GralSeverService } from '../../../services/gral-sever.service';
import { environment } from '../../../../environments/environment';
import { Observable } from 'rxjs';

interface Portada {
  id: string;
  img: string;
  texto: string;
}


@Component({
  selector: 'app-main',
  templateUrl: './main.component.html',
  styleUrls: ['./main.component.css']
})
export class MainComponent implements OnInit {


  portadas:Observable<Portada[]>;
  destacados:Observable<any[]>;
  URL = environment.URL;

  constructor(private gralService: GralSeverService) { }

  ngOnInit(): void {
    window.scroll(0,0);

    this.portadas = this.gralService.getPortadas();
    this.destacados = this.gralService.getDestacados();
    console.log(this.destacados);
  }

}
