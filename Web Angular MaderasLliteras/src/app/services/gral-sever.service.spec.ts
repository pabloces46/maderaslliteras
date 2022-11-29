import { TestBed } from '@angular/core/testing';

import { GralSeverService } from './gral-sever.service';

describe('GralSeverService', () => {
  let service: GralSeverService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(GralSeverService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
