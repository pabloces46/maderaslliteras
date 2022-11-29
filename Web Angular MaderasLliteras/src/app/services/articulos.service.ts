import { Injectable } from '@angular/core';

import { HttpClient, HttpHeaders } from "@angular/common/http";

//import { articulos } from '../../assets/articulos';

import { environment } from '../../environments/environment';

import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ArticulosService {

  URL = environment.URL;

  constructor(private http: HttpClient) { }

  getFilterSearch(data: any){
    return this.http.post(`${this.URL}publico/get_product_search.php`, JSON.stringify(data));
  }


  getFilterByRubro(data: any){
    return this.http.post(`${this.URL}publico/get_product_list.php`, JSON.stringify(data));
  }

  sendMail(data: any){
    return this.http.post(`${this.URL}publico/sendmail.php`, JSON.stringify(data));
  }


  getDetail(data: any):Observable<any[]>{
    return this.http.post<any[]>(`${this.URL}publico/get_articulo_detail.php`, JSON.stringify(data));
  }

  getRelated():Observable<any[]>{
    return this.http.get<any[]>(`${this.URL}publico/get_related_articulos.php`);
  }


}
