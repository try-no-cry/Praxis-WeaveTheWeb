import java.util.Scanner;
import java.lang.Object;

class MarksOutOfBoundsException extends Exception
{	private int m;
	MarksOutOfBoundsException(int marks)
	{
		m = marks;
	}
	public StringtoString() {
		return ("MarksOutOfBoundsException" + m);
	}
}
class Student {
	String name;
	int seatno, date, centerno, marks1, marks2, marks3;
	public Student() {
		System.out.println("Enter name, seatno, date, centerno, marks1, marks2, marks3:");
		name = sc.next();
		seatno, date, centerno, marks1, marks2, marks3;
	}
	public int Result(marks1, marks2, marks3) {
		return marks1+marks2+marks3;
	}
	public Static void main(String args[]) {
		
	}
}