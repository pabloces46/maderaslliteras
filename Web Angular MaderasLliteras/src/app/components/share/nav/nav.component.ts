import { Component, OnInit, Renderer2 } from '@angular/core';
import { FormControl } from '@angular/forms';
import { Router } from '@angular/router';

@Component({
  selector: 'app-nav',
  templateUrl: './nav.component.html',
  styleUrls: ['./nav.component.css']
})
export class NavComponent implements OnInit {

  busqueda = new FormControl('');

  constructor(private router: Router, private renderer: Renderer2) { }

  ngOnInit(): void {
  }

  submit(){
    //console.log(this.busqueda.value);

    let auxValue = this.busqueda.value;
    this.busqueda.reset();
    if(auxValue == ""){
      this.router.navigate(['/productos']);
    }
    else{
      this.router.navigate(['/productos/search', auxValue]);
    }
    
  }

  closeMenu(){
    this.renderer.addClass(document.getElementById('menuButton'), 'collapsed');
    document.getElementById('menuButton').setAttribute('aria-expanded', 'false');
    this.renderer.removeClass(document.getElementById('navbarSupportedContent'), 'show');
  }

}
