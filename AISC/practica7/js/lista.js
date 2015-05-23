function Lista()
{
	this.listaItems=[];
	this.pos=0;
	this.numItems=0;
}
Lista.prototype.clear = function()
{
	this.listaItems = [];
	this.numItems = this.pos=0;
}

Lista.prototype.agregar = function(item)
{
	this.listaItems[this.numItems++] = item;
	//cosas
}

Lista.prototype.toString = function()
{
	console.log(this.listaItems);
	//cosa
}

Lista.prototype.buscar = function(item)
{
	for(var i=0; i<this.numItems;i++)
		if(this.listaItems[i] == item)
			return i;
	return -1;	
}

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
	//cosa
}

Lista.prototype.siguiente = function()
{
	if(this.pos>=0 && this.pos<this.numItems-1)
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
		--this.numItems;
		return true;
	}
	return	false;
	
}

Lista.prototype.anterior = function()
{
	if(this.pos<this.numItems && this.pos>0)
		this.pos--;
	else
		console.log("No puedes retroceder mas");
}

Lista.prototype.getItem = function()
{
	console.log(this.listaItems[this.pos]);
	//cosa
}

Lista.prototype.inicio = function()
{
	this.pos=0;
	//cosa
}

Lista.prototype.ultimo = function()
{
	thi.pos = this.numItems-1;
	//cosa
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
	var txt = document.createTextNode(this.listaItems[this.numItems-1]);
	td.appendChild(txt);
}