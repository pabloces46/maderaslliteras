
import { Pipe, PipeTransform } from '@angular/core';
@Pipe({name: 'replace'})
export class ReplacePipe implements PipeTransform {
  transform(value: string): string {
    //console.log(value);
    if(value) {
	    let newValue = value.replace(/\n/g, "<br>");
	    //console.log(newValue);
	    return newValue;
  	}
  }
}