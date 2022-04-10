package casodeestudiostrategy;


import java.util.ArrayList;

public class Fong implements doctor {
	

	private double precio = 5000.0;

	@Override
	public void visitar(nino[] niños) {
		for(int i=0; i < niños.length;i++) {
			//examinar niños
			String status=niños[i].getstatusOculista();
			//enviar factura a padres
			System.out.println("su factura es de "+precio);
			//enviar resultado a padres
			System.out.println("el estado de su hijo es  "+status);
		}
		
	}

	@Override
	public int getid() {
		// TODO Auto-generated method stub
		return 1;
	}
	
}
