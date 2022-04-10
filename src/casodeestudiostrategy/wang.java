package casodeestudiostrategy;


import java.util.ArrayList;

public class wang implements doctor {
	
	private int id=0;
	private double precio = 100000.0;
	@Override
	public void visitar(nino[] niños) {
		// TODO Auto-generated method stub
		
		for(int i=0; i < niños.length;i++) {
			//examinar niños
			String status=niños[i].getstatusOculista();
			//enviar factura a padres
			System.out.println("su factura es de "+precio);
			//enviar resultado a padres
			System.out.println("el estado de la vision de su hijo es  "+status);
		}
		
	}

	@Override
	public int getid() {
		// TODO Auto-generated method stub
		return id;
	}

}
