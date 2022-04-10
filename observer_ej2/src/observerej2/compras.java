package observer;



public class compras implements observer{

	@Override
	public void update(subjet o, Object arg) {
		// TODO Auto-generated method stub
		if(o instanceof AlarmaLibro){
			AlarmaLibro alarma = (AlarmaLibro) o;
			System.out.println("el libro "+(alarma.getlibro()).getnombre()+" no esta disponible");
		    
		}
	}

}
