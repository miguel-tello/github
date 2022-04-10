package observer;



public class AlarmaLibro {

	public void actualizar(libro devuelto, administracion ad, Stock s, compras c) {
		// TODO Auto-generated method stub
		ad.update(devuelto);
		s.update(devuelto);
		c.update(devuelto);
	}

}
