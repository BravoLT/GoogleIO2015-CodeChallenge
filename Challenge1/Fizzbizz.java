package challenge1;

public class Fizzbizz {
	   public static void main(String[] args)	   {  
		   System.out.println("Challenge 1: FizzBuzz");
		   
		   for(int i=1; i<=100; i++){
			   if(i%3 == 0){
				   if(i%5 == 0){
					   System.out.println("FizzBuzz"); //divisible by 3 and 5
				   }
				   else{
					   System.out.println("Fizz"); //just divisible by 3
				   }
			   }
			   else if(i%5 == 0)
			   {
				   System.out.println("Buzz"); //just divisible by 5
			   }
			   else{	   
				   System.out.println(i);
			   }
		   }
				   
	   }

}
