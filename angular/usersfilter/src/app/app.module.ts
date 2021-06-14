import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { UsersComponent } from './users/users.component';
//
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

@NgModule({
  declarations: [
    AppComponent,
    UsersComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    CommonModule, // agregados para
    FormsModule   // los input HTML
  ],
  exports: [
    UsersComponent  // Lo exportamos hacia el componente que lo requiera
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }