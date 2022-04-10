public class Garefosy {

    private int altura;
    private Coordenadas cordenadas;

    public Garefosy(){
        AlAzar alAzar=new AlAzar();
        setAltura(alAzar.getNumero());
        cordenadas=new Coordenadas();
    }
    public Coordenadas getCordenadas() {
        return cordenadas;
    }

    public int getAltura() {
        return altura;
    }

    private void setAltura(int altura){
        this.altura=altura;
    }

    private void setCordenadas(Coordenadas cordenadas) {
        this.cordenadas = cordenadas;
    }

    @Override
    public String toString() {
        return "altura: "+altura+cordenadas.toString();
    }
}
