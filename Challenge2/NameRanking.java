package challenge2;
import java.io.File;
import java.io.BufferedReader;
import java.io.FileInputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.util.*;

public class NameRanking {
	   public static void main(String[] args)
	   {  
		   ArrayList<String> names = new ArrayList<String>();
		   ArrayList<Integer> count = new ArrayList<Integer>();
		   Scanner in = new Scanner(System.in);

		   try
		   {  
			   	System.out.print("Input file: ");
			   	String inFile = in.next();
			   	InputStream inStream = new FileInputStream(inFile);
			   	BufferedReader reader = new BufferedReader(new InputStreamReader(inStream));
		        String line;
		        while ((line = reader.readLine()) != null) {
		        	boolean contained = false;
		        	for (int i = 0; i< names.size(); i++) {
		        		String string = names.get(i);
		        		if(line.equals(string)){
		        			contained = true;
		        			Integer value = count.get(i);
		        			value = value + 1;
		        			count.set(i, value);
		        		}
		        	}
		            if(contained == false){
		            	names.add(line);
		            	count.add(1);
		            }
		        }
		        
		       for (int i = 0; i < names.size(); i++){
		        	Integer value = count.get(i);
		        	for(int j = i; j<names.size(); j++){
		        		Integer value2 = count.get(j);
		        		if(value2 > value){
		        			String name = names.get(i);
		        			String name2 = names.get(j);
		        			names.set(i, name2);
		        			names.set(j, name);
		        			count.set(i, value2);
		        			count.set(j, value);
		        			value = value2;
		        		}
		        	}
		        }
		        
		        
		        for (int i = 0; i< names.size(); i++){
		        	System.out.println(names.get(i)+" "+count.get(i));	
		        }
			   	
		        reader.close();
			   	inStream.close();
		    }
		    catch (IOException exception)
		    {  
		    	System.out.println("Error processing file: " + exception);
		    }
		      
	   }

}
