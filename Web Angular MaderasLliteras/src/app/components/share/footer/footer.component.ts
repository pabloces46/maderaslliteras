import { Component, OnInit } from '@angular/core';
declare let L;
import {GralSeverService } from '../../../services/gral-sever.service';
import { Observable } from 'rxjs';

@Component({
  selector: 'app-footer',
  templateUrl: './footer.component.html',
  styleUrls: ['./footer.component.css']
})
export class FooterComponent implements OnInit {

  contacto:Observable<any[]>;

  constructor( private gralService: GralSeverService ) { }

  ngOnInit(): void {
    const map = L.map('map-footer').setView([-31.56597, -68.52653],16);
    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
        maxZoom: 18
    }).addTo(map);

    L.control.scale().addTo(map);
    let marker = L.marker([-31.56592, -68.52699]).addTo(map).bindPopup("Lliteras Placas y Maderas");

    this.contacto = this.gralService.getContacto();
    //console.log(this.contacto);
  }

}
