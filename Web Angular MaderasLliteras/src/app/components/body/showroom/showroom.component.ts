import { Component, OnInit } from '@angular/core';
import {GralSeverService } from '../../../services/gral-sever.service';
import { environment } from '../../../../environments/environment';
import { Observable } from 'rxjs';

@Component({
  selector: 'app-showroom',
  templateUrl: './showroom.component.html',
  styleUrls: ['./showroom.component.css']
})
export class ShowroomComponent implements OnInit {

  showroomImg:Observable<any[]>;
  URL = environment.URL;

  constructor( private gralService: GralSeverService ) { }

  ngOnInit(): void {
    window.scroll(0,0);
    this.showroomImg = this.gralService.getShowroomImg();
  }

}
