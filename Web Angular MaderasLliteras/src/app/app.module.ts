import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NavComponent } from './components/share/nav/nav.component';
import { FooterComponent } from './components/share/footer/footer.component';
import { MainComponent } from './components/body/main/main.component';
import { ProductosComponent } from './components/body/productos/productos.component';
import { ContactoComponent } from './components/body/contacto/contacto.component';
import { FaqComponent } from './components/body/faq/faq.component';
import { EnviosComponent } from './components/body/envios/envios.component';
import { PagosComponent } from './components/body/pagos/pagos.component';
import { OptimizacionesComponent } from './components/body/optimizaciones/optimizaciones.component';
import { ShowroomComponent } from './components/body/showroom/showroom.component';
import { DondeestamosComponent } from './components/body/dondeestamos/dondeestamos.component';
import { CategoriasdeproductosComponent } from './components/body/categoriasdeproductos/categoriasdeproductos.component';


import { NgxPaginationModule } from 'ngx-pagination'; // <-- import the module
import { ReactiveFormsModule } from '@angular/forms';
import { FormsModule  } from '@angular/forms';
import { DetalleproductoComponent } from './components/body/detalleproducto/detalleproducto.component';

import { HttpClientModule } from '@angular/common/http';
import { ReplacePipe } from './pipies/replace.pipe';


@NgModule({
  declarations: [
    AppComponent,
    NavComponent,
    FooterComponent,
    MainComponent,
    ProductosComponent,
    ContactoComponent,
    FaqComponent,
    EnviosComponent,
    PagosComponent,
    OptimizacionesComponent,
    ShowroomComponent,
    DondeestamosComponent,
    CategoriasdeproductosComponent,
    DetalleproductoComponent,
    ReplacePipe
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    NgxPaginationModule,
    ReactiveFormsModule,
    FormsModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
