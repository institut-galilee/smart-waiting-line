import java.util.LinkedList;
import java.util.Queue;

public class QueueIot {
	
	private Queue<String> file; 
	public Queue<String> getFile() {
		return file;
	}


	public void setFile(Queue<String> file) {
		this.file = file;
	}
	
	
	public QueueIot() {
		this.file = new LinkedList<>();	
	}

	
	
	public void addFile(String nom){
		file.add(nom);
	}
	
	public void retireFirstInFile(){
		if(!file.isEmpty()) {
			file.poll();
		}
		else {
			System.out.println("la file est vide ");
		}
	}
	
	public void retireAllInFile(){
		if(!file.isEmpty()) {
			file.removeAll(file);
		}
		else {
			System.out.println("la file est vide ");
		}
	}


	public int getPostionInFile(String name ) {
		int i=0;
		for(i =0; i<file.size();i++){
			if(((LinkedList<String>) file).get(i)==name) {
					return i+1;
				}
				
			}
				System.out.println("la personne n'exist pas dans la file ");
			
			
		return (Integer) null;
	}
	
	public void printfile() {
		System.out.println(file);
	}
}
