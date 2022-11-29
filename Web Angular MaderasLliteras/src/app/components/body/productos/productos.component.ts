import { Component, OnInit } from '@angular/core';
import {Router} from '@angular/router';

import {ActivatedRoute} from '@angular/router';

import { ArticulosService } from '../../../services/articulos.service';

import { environment } from '../../../../environments/environment';
import { FormControl } from '@angular/forms';

@Component({
  selector: 'app-productos',
  templateUrl: './productos.component.html',
  styleUrls: ['./productos.component.css']
})
export class ProductosComponent implements OnInit {

  URL = environment.URL;

  //Pagination
  page: number = 1;
  maxSize: number = 12;

  busqueda = new FormControl('');
  
  articulosFilterResult = [];
  rubros = ["Maderas","Ferreteria","Adhesivos","Proteccion","Herramientas"];
  familias = [];
  categorias = [];
  subCategorias = [];
  articulosParaMostrar = [];

  TotalArticulos = 0;
  TotalArticulosParaMostrar = 0;
  searchValue = "";
  searchParameterValue = "";
  ParameterValue = "";

  filtroRubro = "";
  filtroFamilia = "";
  filtroCategoria = "";
  filtroSubcategoria = "";
  
  showFamily = true;
  showCategoria = true;

  constructor(private route:ActivatedRoute, private router: Router, private artService: ArticulosService) {
    // force route reload whenever params change;
    this.router.routeReuseStrategy.shouldReuseRoute = () => false;
   }

  ngOnInit(): void {
    window.scroll(0,0);

    this.searchParameterValue = this.route.snapshot.paramMap.get('search');
    this.ParameterValue = this.route.snapshot.paramMap.get('value');
    
    //get('value') es el rubro o search en caso de q este haciendo una busqueda
    //Si el parametdo Value == Search busco filtro los datos segun el compo de busqueda
    if(this.ParameterValue == "search" && this.searchParameterValue != null){
      this.artService.getFilterSearch(this.searchParameterValue).subscribe(
        (resp:any) => {
          //console.log(resp);
          if(resp.error == 0){
            this.articulosFilterResult = resp.data;
            this.articulosParaMostrar = this.articulosFilterResult;
            this.TotalArticulos = this.articulosFilterResult.length;
        
            //console.log(this.articulosParaMostrar);
            this.articulosLenght();
            this.makeFamilyArray();
          }
          if(resp.error == 1){
            //console.log("error");
            this.router.navigate(['/categorias']);
          }
      });
    }
    //Si no filtro segun el rubro
    else{
      //this.articulosFilterResult = this.artService.getFilterByRubro(this.ParameterValue);
      this.artService.getFilterByRubro(this.ParameterValue).subscribe(
        (resp:any) => {
          //console.log(resp);
          if(resp.error == 0){
            this.articulosFilterResult = resp.data;
            this.articulosParaMostrar = this.articulosFilterResult;
            this.TotalArticulos = this.articulosFilterResult.length;
        
            //console.log(this.articulosParaMostrar);
            this.articulosLenght();
            this.makeFamilyArray();
          }
          if(resp.error == 1){
            //console.log("error");
            this.router.navigate(['/categorias']);
          }
      });
    }
    

  }

  makeFamilyArray(){
    let aux = [];
    let auxarray = [];

    this.familias = [];

    auxarray = this.articulosFilterResult;

    //armo array solo con los grupos de familia
    for (let i = 0; i<auxarray.length; i++) {
      let current = auxarray[i]['familia'];
      aux.push(current);
    }

    const arr = aux.filter((el, index) => aux.indexOf(el) === index);


    for (let i = 0; i<arr.length; i++) {
      let cant = 0;
      for (let j = 0; j<aux.length; j++) {
        if(aux[j] == arr[i]){
          cant++;
        }
      }
      let currentNumber = { familia : arr[i] , cant : cant };
      this.familias.push(currentNumber);
    }

    this.makeCategorias();

  }

  makeCategorias(){
    let aux = [];
    let auxarray = this.articulosParaMostrar;
    
    this.categorias = [];

    //armo array solo con los grupos de categorias
    for (let i = 0; i<auxarray.length; i++) {
      let current = auxarray[i]['categoria'];
      aux.push(current);
    }
    
    let arr = aux.filter((el, index) => aux.indexOf(el) === index);

    for (let i = 0; i<arr.length; i++) {
      let cant = 0;
      for (let j = 0; j<aux.length; j++) {
        if(aux[j] == arr[i]){
          cant++;
        }
      }
      if(arr[i] != ''){
      let currentNumber = { categoria : arr[i] , cant : cant };
      this.categorias.push(currentNumber);
      }
    }
    this.makeSubCategorias();

  }

  makeSubCategorias(){
    let aux = [];
    let auxarray = this.articulosParaMostrar;
    
    this.subCategorias = [];

    //armo array solo con los grupos de SubCategorias
    for (let i = 0; i<auxarray.length; i++) {
      let current = auxarray[i]['subcategoria'];
      aux.push(current);
    }
    
    let arr = aux.filter((el, index) => aux.indexOf(el) === index);

    for (let i = 0; i<arr.length; i++) {
      let cant = 0;
      for (let j = 0; j<aux.length; j++) {
        if(aux[j] == arr[i]){
          cant++;
        }
      }
      let currentNumber = { subcategoria : arr[i] , cant : cant };
      this.subCategorias.push(currentNumber);
    }
  }

  showAllProducts(){
    this.articulosParaMostrar = this.articulosFilterResult;
    this.filtroFamilia = "";
    this.filtroCategoria = "";
    this.filtroSubcategoria = "";
    this.makeFamilyArray();
  }

  rubroFilter(value){
    let aux = value.toLowerCase();
    if(this.ParameterValue == aux){
      this.filtroFamilia = "";
      this.filtroCategoria = "";
      this.filtroSubcategoria = "";
      this.makeFilterToShow();
    }
    else{
      this.router.navigate(['/productos', aux]);
    }
    
    
  }

  familyFilter(value){
    //this.articulosParaMostrar = this.articulosFilterResult.filter(fam => fam.familia == value);
    //this.makeFamilyArray();
    this.filtroFamilia = value;
    this.filtroCategoria = "";
    this.filtroSubcategoria = "";
    this.makeFilterToShow();
    this.showFamily = false;
  }

  categoryFilter(value){
    //this.articulosParaMostrar = this.articulosFilterResult.filter(cat => cat.categoria == value);
    //this.makeCategorias();
    this.filtroCategoria = value;
    this.filtroSubcategoria = "";
    this.makeFilterToShow();
    this.showCategoria = false;
  }

  subCategoryFilter(value){
    //this.articulosParaMostrar = this.articulosParaMostrar.filter(cat => cat.subcategoria == value);
    //this.makeSubCategorias();
    this.filtroSubcategoria = value;
    this.makeFilterToShow();
  }

  makeFilterToShow(){
    let aux = this.articulosFilterResult;
    if(this.filtroFamilia != ""){
      aux = aux.filter(fam => fam.familia == this.filtroFamilia);
    }
    if(this.filtroCategoria != "") {
      aux = aux.filter(cat => cat.categoria == this.filtroCategoria);
    }
    if(this.filtroSubcategoria != ""){
      aux = aux.filter(cat => cat.subcategoria == this.filtroSubcategoria);
    }
    this.articulosParaMostrar = aux;
    this.makeFamilyArray();
    
    window.scroll(0,0);
  }

  ordenar(valor){

    if(valor == "AZ"){
      this.articulosParaMostrar.sort((a,b)=>(a.nombre > b.nombre) ? 1 : -1);
    }
    if(valor == "ZA"){
      this.articulosParaMostrar.sort((a,b)=>(b.nombre > a.nombre) ? 1 : -1);
    }

  }

  mostrar(valor){

    if(valor == 12){
      this.maxSize = 12;
    }
    if(valor == 24){
      this.maxSize = 24;
    }

    this.page = 1;

  }

  searchSubmit(){
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

  articulosLenght(){
    this.TotalArticulosParaMostrar = this.articulosParaMostrar.length;
  }

  clearFilter(value){
    if(value == 'familia'){
      this.filtroFamilia = "";
      this.showFamily = true;
    }
    if(value == 'categoria'){
      this.filtroCategoria = "";
      this.showCategoria = true;
    }
    if(value == 'subcategoria'){
      this.filtroSubcategoria = "";
    }
    this.makeFilterToShow();
    this.makeFamilyArray();
  }

}
