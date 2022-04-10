package observer;

public class main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		biblioteca municipal = new biblioteca();
		libro devuelto = new libro("generico",false);
		municipal.addlibro(devuelto);

	}

}
