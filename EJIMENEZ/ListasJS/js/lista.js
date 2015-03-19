//Esta funcion crea la lista que se utilizará
function Lista()
{
	this.listaItems = [];
	this.pos = 0;
	this.numeroItems = 0;
}

//En esta funcion limpia los items que se han agregado a la lista y deja en blanco la lista
Lista.prototype.clear = function()
{
	this.listaItems = [];
	this.numeroItems = this.pos = 0;
}

//En esta funcion se agregan los nuevos valores a la lista
Lista.prototype.agregar = function(item)
{
	this.listaItems[this.numeroItems++] = item;
}

//Esta funcion convierte los valores a un string
Lista.prototype.toString = function()
{
	console.log(this.listaItems);
}

//En esta funcion nos busca un item determinado en una lista y nos devuelve el indice
Lista.prototype.buscar = function(item)
{
	for(var i=0; i<this.numeroItems-1; i++)
	{
		if(this.listaItems[i] == item)
		{
			return i;
		}
	}
	return -1;
}

//Regresa un boleano true, si la lista contiene el item. En caso contrario regresa false
Lista.prototype.contiene = function(item)
{
	var = index = this.buscar(item);
	if (index >= 0)
	{
		return true;
	}
	else
	{
		return false;
	}
}

//Muestra la posicion actual de la lista
Lista.prototype.posActual = function()
{

}

//Muestra el siguiente valor de la lista
Lista.prototype.siguiente = function()
{

}

//Muestra el valor anterior de la lista
Lista.prototype.anterior = function()
{

}

//Devuelve el elemento actual
Lista.prototype.getElement = function()
{

}

//Muestra el inicio de la lista
Lista.prototype.inicio = function()
{

}

//Muestra el ultimo item de la lista
Lista.prototype.ultimo = function()
{

}