import java.util.*;

public class Ballthing
{
  public static void main(String[] args)
  { 
    // Make our array
    ArrayList<String> bag = new ArrayList<String>();
    // Set vars for packing the bag (this part is eaiser in php)
    int totalBlack = 20;
    int totalWhite = 16;
    int currentLoop = 0;
    // Pack the bag
    
    // Pack black
    while(currentLoop < totalBlack){
      bag.add("black");
      currentLoop++;
    }
    // Reset our loop
  	currentLoop = 0;
    // Pack white
    while(currentLoop < totalWhite){
      bag.add("white");
      currentLoop++;
    }
    
    // Check if we have the last ball
    
    int lastBall = 0;
    
    // While we dont have the last ball in the bag, do this
    
    Random rand = new Random();
    
    while(lastBall == 0){
      // Shuffle the bag
      Collections.shuffle(bag);
      // Pick to random elements from the shuffled list
      	// Some logic here. Im going to 'take' the ball from the bag so it cant be picked twice
      
      // Ball 1 Logic
      int ball1 = rand.nextInt(bag.size());
      String ball1Name = bag.get(ball1);
      bag.remove(ball1);
      
      
      // Ball 2 Logic
      int ball2 = rand.nextInt(bag.size());
      String ball2Name = bag.get(ball2);
      bag.remove(ball2);
      
      System.out.println("Picked " + ball1Name + " And " + ball2Name + ". Match? : " + ball1Name.equals(ball2Name));
 
      
      if(ball1Name.equals(ball2Name)){
      	// They are the same, add a black ball into the bag
        bag.add("black");
        System.out.println("Added Black");
      }else{
      	// They are different, add a white ball into the bag
        bag.add("white");
        System.out.println("Added White");
      }
      
      // If we are on the last ball. show it, else, show the bag and repeat
      
      if(bag.size() < 2){
        System.out.print("Last Ball : " + bag.size() + bag);
        lastBall = 1;
      }else{
        System.out.print("Bag : " + bag.size() + bag);
      }
      
    }
    
  }
}
