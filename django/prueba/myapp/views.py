from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.

def index(request):
    # Obtener un HttpRequest - el parametro peticion
    # Realizar operaciones usando la infomracion de la peticion.
    # Devolver una HttpResponse
    return HttpResponse('!Hola desde Django!')
