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
		if(arg instanceof libro){
			libro l = (libro) arg;
			System.out.println("el libro "+l.getnombre()+" tiene que ser cambiado");
		    librosestropeados.add(l);
		}
	}

}
