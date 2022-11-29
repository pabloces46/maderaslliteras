import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CategoriasdeproductosComponent } from './categoriasdeproductos.component';

describe('CategoriasdeproductosComponent', () => {
  let component: CategoriasdeproductosComponent;
  let fixture: ComponentFixture<CategoriasdeproductosComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CategoriasdeproductosComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CategoriasdeproductosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
