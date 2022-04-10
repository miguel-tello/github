package observer;

public class biblioteca {


	private administracion ad;
	private Stock s;
	private compras c;
	AlarmaLibro al;
	public biblioteca(){
		ad=new administracion();
		s=new Stock();
		c=new compras();
		al = new AlarmaLibro();

	}
	public void addlibro(libro devuelto) {
		
		al.addObserver(ad);
		al.addObserver(s);
		al.addObserver(c);

		if(!devuelto.getestado())
		    al.actualizar(devuelto);
		else
			System.out.println("el libro devuelto esta en buen estado");
	}

}
