import { Component, OnInit } from '@angular/core';
import {GralSeverService } from '../../../services/gral-sever.service';
import { Observable } from 'rxjs';


@Component({
  selector: 'app-faq',
  templateUrl: './faq.component.html',
  styleUrls: ['./faq.component.css']
})
export class FaqComponent implements OnInit {

  preguntas:Observable<any[]>;

  constructor( private gralService: GralSeverService ) { }

  ngOnInit(): void {
    window.scroll(0,0);
    this.preguntas = this.gralService.getPreguntas();
  }

}
