var image1=new Image()
	image1.src="images/image1.jpg"
var image2=new Image()
	image2.src="images/image2.jpg"
var image3=new Image()
	image3.src="images/image3.jpg"
var cantidad_de_imagenes=3

var velocidad=2
var paso=1
var numero_de_imagen=1

function deslizar_imagenes(){
	if (!document.images)
		return
	if (document.all)
		deslizar.filters.blendTrans.apply()
		document.images.deslizar.src=eval("image"+paso+".src")
	if (document.all)
		deslizar.filters.blendTrans.play()
		numero_de_imagen=paso
		if (paso<cantidad_de_imagenes)
			paso++
		else
			paso=1
		if (document.all)
			setTimeout("deslizar_imagenes()",velocidad*1000+3000)
		else
			setTimeout("deslizar_imagenes()",velocidad*1000)
}
