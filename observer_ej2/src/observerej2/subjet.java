package observer;

import java.util.ArrayList;

public class subjet {


    private ArrayList<observer> observers;

    public subjet(){
        observers = new ArrayList<>();
    }

    public void addObserver(observer o){
        observers.add(o);
    }
    public void removeObserver(observer o){
        observers.remove(o);
    }
    public void notifyObservers(){
        for(int i=0;i<observers.size();i++){
            observers.get(i).update(this,null);
        }
    }
}
