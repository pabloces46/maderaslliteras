import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from "@angular/common/http";
import { Observable } from 'rxjs';
import { environment } from '../../environments/environment'

interface Portada {
  id: string;
  img: string;
  texto: string;
}

@Injectable({
  providedIn: 'root'
})
export class GralSeverService {

  URL = environment.URL;

  constructor(private http: HttpClient) { }

  getPortadas():Observable<Portada[]>{
    return this.http.get<Portada[]>(`${this.URL}publico/get_portadas.php`);
  }

  getDestacados():Observable<any[]>{
    return this.http.get<Portada[]>(`${this.URL}publico/get_destacados.php`);
  }

  getShowroomImg():Observable<any[]>{
    return this.http.get<any[]>(`${this.URL}publico/get_showroom_img.php`);
  }

  getPreguntas():Observable<any[]>{
    return this.http.get<any[]>(`${this.URL}publico/get_preguntas.php`);
  }

  getPreciosEnvios():Observable<any[]>{
    return this.http.get<any[]>(`${this.URL}publico/get_precios.php`);
  }

  getContacto():Observable<any[]>{
    return this.http.get<any[]>(`${this.URL}publico/get_contacto.php`);
  }

}
