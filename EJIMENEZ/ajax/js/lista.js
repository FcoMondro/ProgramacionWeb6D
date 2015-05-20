function Lista()
{
	this.listaItems=[];
	this.pos=0;
	this.numeroItems=0;
}
Lista.prototype.clear = function()
{
	// body...
	this.listaItems = [];
	this.numeroItems = this.pos=0;
}
/*
	Esta funcion agrega el elemento item al final de la lista
*/
Lista.prototype.agregar = function(item)
{
	this.listaItems[this.numeroItems++] = item;
}
Lista.prototype.toString = function()
{
	console.log(this.listaItems);
}
/*
	Esta funcion devuelve el indice dentro de la Lista.
	En caso de no encontrarlo devuelve -1
*/
Lista.prototype.buscar = function(item)
{
	for(var i=0; i<this.numeroItems;i++)
		if(this.listaItems[i] == item)
			return i;
	return -1;	
}
/*
	Regresa un valor boolean TRUE si la lista contiene el item.
	En caso contrario regresa FALSE	
*/
Lista.prototype.contiene = function(item)
{
	var index = this.buscar(item);
	if(index >=0)
		return true;
	return false;
}
Lista.prototype.posActual = function()
{
	console.log(this.pos);
}
Lista.prototype.siguiente = function()
{
	if(this.pos>=0 && this.pos<this.numeroItems-1)
		this.pos++;
	else
		console.log("No puedes seguir mas");
}
Lista.prototype.eliminar = function(item)
{
	var index = this.buscar(item);
	if(index>-1)
	{
		this.listaItems.splice(index,1);
		--this.numeroItems;
		return true;
	}
	return	false;
	
}
Lista.prototype.anterior = function()
{
	if(this.pos<this.numeroItems && this.pos>0)
		this.pos--;
	else
		console.log("No puedes retroceder mas");
}
Lista.prototype.getItem = function()
{
	console.log(this.listaItems[this.pos]);
}
Lista.prototype.inicio = function()
{
	this.pos=0;
}
Lista.prototype.ultimo = function()
{
	thi.pos = this.numeroItems-1;
}
Lista.prototype.moverA = function(index)
{
	if(index >=0 && index<this.listaItems-1)
		this.pos = index;
}
Lista.prototype.dibujar = function(isBody)
{
	var ele = document.getElementById("isBody");
	var tr = document.createElement('tr');
	ele.appendChild(tr);
	var td = document.createElement('td');
	tr.appendChild(td);
	var txt = document.createTextNode(this.listaItems[this.numeroItems-1]);
	td.appendChild(txt);
}