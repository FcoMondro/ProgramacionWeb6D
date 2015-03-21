function Lista(){
	this.listaItems= [];
	this.pos = 0;
	this.numeroItems = 0;
}

Lista.prototype.clear = function(){
	this.listaItems = [];
	this.numeroItems = this.pos = 0;
}
//Esta funcion agregar el elemento al final de la lista
Lista.prototype.agregar = function(item){
	this.listaItems[this.numeroItems++] = item;
}

//esta funcion convierte valores a un string
Lista.prototype.toString = function(){
	console.log(this.listaItems);
}

//Esta funcion devuelve el indice dentro de la lista del elemento item en
//caso de no encontrarlo devuelve -1
Lista.prototype.buscar = function(item){
	for(var i = 0; i <= this.numeroItems-1; i++){
		if(this.listaItems[i] == item)
			return i;
		
	}
	return -1;
}
/*
*	Regresa un valor bolean true, si la lista contiene el item
*	en caso contrario regresa false
*/
Lista.prototype.contiene=function(item){
	var index = this.buscar(item);
	if(index >= 0)
		return true;
		return false;

}

Lista.prototype.posActual = function(){
	console.log(this.pos);
}

Lista.prototype.siguiente = function(){
	if(this.pos>=0 && this.pos<this.numeroItems-1)
		this.pos++;
	else
		console.log("No hay mas para seguir");
}

Lista.prototype.anterior = function(){
	if(this.pos < this.numeroItems && this.pos > 0)
		this.pos--;
	else
		console.log("No hay mas para retroceder");
}


Lista.prototype.getElemento = function(){
	console.log(this.listaItems[this.pos]);
}

/*
*
*/
Lista.prototype.moverA = function(index){
	if(index <=0 && index < listaItems-1)
		this.pos = index;
}

Lista.prototype.inicio = function(){
	console.log(this.listaItems[0]);
}


Lista.prototype.ultimo = function(){
	this.pos = this.numeroItems-1;
	
}

Lista.prototype.eliminar = function(item){

var index = this.buscar(item);
if(index > -1){
	this.listaItems.splice(index,1);
	--this.numeroItems;
	return true;
}
return false;
}

Lista.prototype.dibujar = function(tablebody){

	var element = document.getElementById("tablebody");
	var tr = document.createElement('tr');
	
	element.appendChild(tr);
	var td = document.createElement('td');

	tr.appendChild(td);
	var txtNode = document.createTextNode(this.listaItems[this.numeroItems-1]);
	td.appendChild(txtNode);
}
