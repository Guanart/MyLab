import { Component, OnInit } from '@angular/core';

// Importo la lista de usuarios en formato JSON
import listaUsuarios from 'src/assets/JSON/users.json';

@Component({
  selector: 'users',
  templateUrl: './users.component.html',
  styleUrls: ['./users.component.css']
})
export class UsersComponent implements OnInit {
  // Exporto los datos del archivo JSON a la  vista 
  usuarios: any = listaUsuarios;
  searchText: any ;
  constructor() {
    
  }
  
  ngOnInit(): void {
  }

}
