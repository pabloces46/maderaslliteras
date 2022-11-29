import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { EnviosComponent } from './envios.component';

describe('EnviosComponent', () => {
  let component: EnviosComponent;
  let fixture: ComponentFixture<EnviosComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ EnviosComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(EnviosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
