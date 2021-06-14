/*
Lo que hago es crear un módulo llamado *.json con la constante any. Este any lo he usado en mi archivo o 
componente app.componente.ts. con esto mi interface ya esta lista para leer el archivo JSON
*/

declare module "*.json" {
    const value: any;
    export default value;
 }