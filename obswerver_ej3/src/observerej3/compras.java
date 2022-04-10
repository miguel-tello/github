package observer;



public class compras implements observer{

	@Override
	public void update(subjet o, Object arg) {
		// TODO Auto-generated method stub
		if(arg instanceof libro){
			libro l = (libro) arg;
			System.out.println("el libro "+l.getnombre()+" no esta disponible");
		    
		}
	}

}
