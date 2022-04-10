package strategybien;

public class pruebastrategy {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		vistacatalogo v;
		System.out.println("vista un vehiculo por linea:");
		v=new vistacatalogo(new dibujaunvehiculoporlinea());
		v.dibuja();
		System.out.println("vista tres vehiculos por linea:");
		v=new vistacatalogo(new dibujatresvehiculosporlinea());
		v.dibuja();
	
	}

}
