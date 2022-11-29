import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { MainComponent } from '../app/components/body/main/main.component';
import { ContactoComponent } from '../app/components/body/contacto/contacto.component';
import { ProductosComponent } from '../app/components/body/productos/productos.component';
import { ShowroomComponent } from '../app/components/body/showroom/showroom.component';
import { FaqComponent } from '../app/components/body/faq/faq.component';
import { EnviosComponent } from '../app/components/body/envios/envios.component';
import { OptimizacionesComponent } from '../app/components/body/optimizaciones/optimizaciones.component';
import { PagosComponent } from '../app/components/body/pagos/pagos.component';
import { DondeestamosComponent } from '../app/components/body/dondeestamos/dondeestamos.component';
import { CategoriasdeproductosComponent } from '../app/components/body/categoriasdeproductos/categoriasdeproductos.component';
import { DetalleproductoComponent } from '../app/components/body/detalleproducto/detalleproducto.component';

const routes: Routes = [
  { path: 'inicio', component: MainComponent },
  { path: 'categorias', component: CategoriasdeproductosComponent },
  { path: 'productos', component: ProductosComponent },
  { path: 'productos/:value', component: ProductosComponent },
  { path: 'productos/:value/:search', component: ProductosComponent },
  { path: 'detalle/:id', component: DetalleproductoComponent },
  { path: 'contacto', component: ContactoComponent },
  { path: 'contacto/:id', component: ContactoComponent },
  { path: 'showroom', component: ShowroomComponent },
  { path: 'faq', component: FaqComponent },
  { path: 'envios', component: EnviosComponent },
  { path: 'optimizaciones', component: OptimizacionesComponent },
  { path: 'pagos', component: PagosComponent },
  { path: 'donde', component: DondeestamosComponent },
  { path: '', redirectTo: '/inicio', pathMatch: 'full' },
];

@NgModule({
  imports: [RouterModule.forRoot(routes,{ scrollPositionRestoration: 'enabled' })],
  exports: [RouterModule]
})
export class AppRoutingModule { }
