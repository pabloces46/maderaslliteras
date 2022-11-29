import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-dondeestamos',
  templateUrl: './dondeestamos.component.html',
  styleUrls: ['./dondeestamos.component.css']
})
export class DondeestamosComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
    window.scroll(0,0);
  }

}
