package strategybien;

public class vistacatalogo {
	
	protected vistavehiculos[] contenido;
	protected dibujacatalogo dibujo;
	
	
	public vistacatalogo(dibujacatalogo dibujo) {
		this.dibujo=dibujo;
		
		int tam = 3;
		contenido=new vistavehiculos[tam];
		for(int i=0;i<contenido.length;i++) {
			contenido[i]=new vistavehiculos("vehiculo"+i);
		}
		
		
	}
	
	public void dibuja() {
		dibujo.dibuja(contenido);
	}
}
