package observer;

public class biblioteca {


	private administracion ad;
	private Stock s;
	private compras c;
	biblioteca(){
		ad=new administracion();
		s=new Stock();
		c=new compras();
	}
	public void addlibro(libro devuelto) {
		AlarmaLibro al = new AlarmaLibro();
		if(!devuelto.getestado())
		al.actualizar(devuelto,ad,s,c);
		else
			System.out.println("el libro devuelto esta en buen estado");
	}

}
