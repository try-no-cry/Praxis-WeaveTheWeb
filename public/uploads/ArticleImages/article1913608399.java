import java.util.Scanner;
import java.lang.*;

class Multicatch
{
  public static void main(String args[])
  {
    try
    {
      int a=args.length;
      System.out.println("a="+a);
      int b=42/a;
      int c[]={1};
      c[42]=99;
    }
    catch(ArithmeticException e)
    {
      System.out.println("Divide by 0: "+ e);
    }
    catch(ArrayIndexOutOfBoundsException e)
    {
      System.out.println("Array index out of bounds:" +e);
    }
    finally {
      System.out.println("Finally block always executed");
    }
    System.out.println("After try/catch blocks.");
  }
}