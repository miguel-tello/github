package observer;



public class AlarmaLibro extends subjet{

	private libro d;
	
	
	AlarmaLibro(){
		super();
		d=new libro();
	}
	public void actualizar(libro devuelto) {
		// TODO Auto-generated method stub
		d=devuelto;

		this.notifyObservers(d);

	}
	public libro getlibro() {
		// TODO Auto-generated method stub
		return d;
	}
	
}
