function Lista(){
	this.listaItems=[];
	this.pos=0;
	this.numeroItems=0;
}
Lista.prototype.clear=function(){
	this.listaItems=[];
	this.numeroItems=this.pos=0;
}
Lista.prototype.agregar=function(item){
	this.listaItems[this.numeroItems++]=item;
}
Lista.prototype.toString=function(){
	console.log(this.listaItems);
}
/*
* Esta funcion devuelve el indice dentro de la lista en caso de no encontrarlo devuelve -1
*/
Lista.prototype.buscar=function(item){
	for (var i = 0; i < this.numeroItems; i++) {
		if (this.listaItems[i]==item) 
			return i;
	}
	return -1;
}
/*
* Regresa a un valor booleano true, si la lista contiene un item, en caso contrario regresa un false
*/
Lista.prototype.contiene=function(item){
	var index=this.buscar(item);
	if(index>=0)
		return true;
	return false;
}
Lista.prototype.posActual=function(){
	console.log(this.posActual);
}
Lista.prototype.siguiente=function(){
	/*if(this.listaItems[this.posActual++]!= null) this.posActual++;*/

	if (this.pos<this.numItems-1 && this.pos>=0)
	{
		this.pos++;
	}
	else
	{
		console.log("No puede seguir");
	}
}
Lista.prototype.anterior=function(){
	/*if(this.listaItems[this.posActual--]!=null) this.posActual--;*/

	if(this.pos>0 && this.pos<this.numItems)
	{
		this.pos--;
	}
	else
	{
		console.log("No puede regresar");
	}
}
Lista.prototype.getElemento=function(){
	/*this.listaItems[this.posActual];*/

	console.log(this.listaItems[this.pos])
}
Lista.prototype.inicio=function(){
	/*this.posActual=0;
	this.getElemento();*/
	this.pos=0;

	console.log(this.listaItems[0]);
}
Lista.prototype.ultimo=function(){
	this.pos=this.numeroItems-1;
	
}
Lista.prototype.elimiar=function(item){
	var index = this.buscar(item);
	if(index>-1){
		this.listaItems.splice(index,1);
		--this.numeroItems
		return true;
	}
	return false;
}
Lista.prototype.moverA=function(index){
	if(index>=0 && index>this.listaItems-1)
		this.pos=index;

}
Lista.prototype.dibujar=function(idBody){
	var aux = document.getElementById("idBody");
	var tr = document.createElement('tr');
		aux.appendChild(tr);
	var td = document.createElement('td');
		tr.appendChild(td);
	var texto= document.createTextNode(this.listaItems[this.numeroItems-1]);
		td.appendChild(texto);
}