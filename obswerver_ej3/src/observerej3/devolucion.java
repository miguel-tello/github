package observer;

public class devolucion {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		biblioteca municipal = new biblioteca();
		libro devuelto = new libro("generico",false);
		municipal.addlibro(devuelto);

	}

}
