package observer;

import java.util.ArrayList;


public class Stock implements observer{
	
	private ArrayList<libro> libros;
	Stock(){
		libros=new ArrayList<>();
	}



	public void addlibro(libro devuelto) {
		// TODO Auto-generated method stub
		libros.add(devuelto);
	}

	@Override
	public void update(subjet o, Object arg) {
		// TODO Auto-generated method stub
		if(o instanceof AlarmaLibro){
			AlarmaLibro alarma = (AlarmaLibro) o;
			System.out.println("el libro "+( alarma.getlibro()).getnombre()+" no sera a�adido al almacen");
		}
	}

}
