import { Component, OnInit } from '@angular/core';
import {GralSeverService } from '../../../services/gral-sever.service';
import { Observable } from 'rxjs';

declare let L;

@Component({
  selector: 'app-envios',
  templateUrl: './envios.component.html',
  styleUrls: ['./envios.component.css']
})
export class EnviosComponent implements OnInit {

  precios:Observable<any[]>;

  radios = [
    "Hasta 1.25 Km",
    "1.25 Km a 2.5 Km",
    "2.5 Km a 3.75 Km",
    "3.75 Km a 5 Km",
    "5 Km a 6.25 Km",
    "6.25 Km a 7.5 Km",
    "7.5 Km a 8.75 Km",
    "8.75 Km a 10 Km"
  ]
  
  constructor(private gralService: GralSeverService) {}

  ngOnInit(): void {

    window.scroll(0,0);

    this.precios = this.gralService.getPreciosEnvios();
    
    const map = L.map('map').setView([-31.56597, -68.52653],12);

    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
        maxZoom: 18
    }).addTo(map);

    L.control.scale().addTo(map);
    
    let circle1000 = L.circle([-31.56597, -68.52653], {
      color: 'blueviolet',
      fillColor: '#fff',
      fillOpacity: 0.,
      radius: 10000
    }).addTo(map).bindPopup("<b>Radio 8 </b>(8.75 Km a 10 Km)");

    let circle8750 = L.circle([-31.56597, -68.52653], {
      color: 'blue',
      fillColor: '#fff',
      fillOpacity: 0.1,
      radius: 8750
    }).addTo(map).bindPopup("<b>Radio 7 </b> (7.5 Km a 8.75 Km)");

    let circle7500 = L.circle([-31.56597, -68.52653], {
      color: '#00f3ff',
      fillColor: '#fff',
      fillOpacity: 0.1,
      radius: 7500
    }).addTo(map).bindPopup("<b>Radio 6 </b> (6.25 Km a 7.5 Km)");

    let circle6250 = L.circle([-31.56597, -68.52653], {
      color: '#079011',
      fillColor: '#fff',
      fillOpacity: 0.1,
      radius: 6250
    }).addTo(map).bindPopup("<b>Radio 5 </b> (5 Km a 6.25 Km)");

    let circle5000 = L.circle([-31.56597, -68.52653], {
      color: '#4bff00',
      fillColor: '#fff',
      fillOpacity: 0.1,
      radius: 5000
    }).addTo(map).bindPopup("<b>Radio 4 </b> (3.75 Km a 5 Km)");

    let circle3750 = L.circle([-31.56597, -68.52653], {
      color: '#fbff00',
      fillColor: '#fff',
      fillOpacity: 0.1,
      radius: 3750
    }).addTo(map).bindPopup("<b>Radio 3 </b> (2.5 Km a 3.75 Km)");
    
    let circle2500 = L.circle([-31.56597, -68.52653], {
      color: '#ff9007',
      fillColor: '#fff',
      fillOpacity: 0.1,
      radius: 2500
    }).addTo(map).bindPopup("<b>Radio 2 </b> (1.25 Km a 2.5 Km)");

    let circle1250 = L.circle([-31.56597, -68.52653], {
      color: 'red',
      fillColor: '#fff',
      fillOpacity: 0.1,
      radius: 1000
    }).addTo(map).bindPopup("<b>Radio 1 </b> (hasta 1.25 Km)");
    
    let marker = L.marker([-31.56592, -68.52699]).addTo(map).bindPopup("Lliteras Placas y Maderas");
    /*let redmarker = L.marker([-31.5659, -68.52692], {draggable: true}).addTo(map).bindPopup("Su ubicación");

    redmarker.on('dragend', function (e) {
      let distance = marker.getLatLng().distanceTo(redmarker.getLatLng())/1000;
      console.log(distance + ' Km');
    });*/

  }

}
