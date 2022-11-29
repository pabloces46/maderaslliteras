import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-optimizaciones',
  templateUrl: './optimizaciones.component.html',
  styleUrls: ['./optimizaciones.component.css']
})
export class OptimizacionesComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
    window.scroll(0,0);
  }

}
