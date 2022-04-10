package observer;

import java.util.ArrayList;


public class administracion implements observer{

	private ArrayList<libro> librosestropeados;
	administracion(){
		librosestropeados=new ArrayList<libro>();
	}
	
	@Override
	public void update(subjet o, Object arg) {
		// TODO Auto-generated method stub

		if(o instanceof AlarmaLibro){
			AlarmaLibro alarma = (AlarmaLibro) o;
			System.out.println("el libro "+( alarma.getlibro()).getnombre()+" tiene que ser cambiado");
		    librosestropeados.add( alarma.getlibro());
		}
	}

}
