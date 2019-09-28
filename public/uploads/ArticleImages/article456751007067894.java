import java.util.Scanner;
class Bank{
	String name;
	int acc_no=0;
	int balance;
	static int count = 0;
	static int min_bal = 500;
	Bank(String n, int b){
		name = n;
		acc_no= ++count;
		balance = b;
	}
	void Deposit(int amt){
		this.balance = this.balance + amt;
	}
	void Withdraw(int amt){
		if((this.balance-amt)< min_bal){
			System.out.println("Unsuccessful Transation");
		}
		else{
			this.balance=this.balance-amt;
		}
	}
	void Display()
	{
		System.out.println("NAME : "+ name +"\t AMOUNT : "+ balance);
	}
	public static void main(String args[]){
		Bank b[] = new Bank[20];
		int i = 0;
		int choice;
		Scanner sc = new Scanner(System.in);
		do
		{
			System.out.print("Main Menu\n 1.Create account\n 2.Deposit\n 3.Withdrawal\n 4.Display\n 5.Exit \n Enter your choice: ");
			choice = sc.nextInt();
			switch(choice)
			{
				case 1:{ System.out.print("Enter opening balance:");
					int bal = sc.nextInt();
					System.out.print("Enter name of account holder:"); 
					String name = sc.next();
					b[i] = new Bank(name,bal);
					i++;
					break;
				}
				case 2:{ System.out.print("Enter account no:");
					int acc = sc.nextInt();
					if(acc>i)
						System.out.print("Invalid account no.");
					else{
						System.out.print("Enter deposit amount:");
						b[acc].Deposit(sc.nextInt());
					}
					break;
				}
				case 3:{ System.out.print("Enter account no:");
					int acc = sc.nextInt();
					if(acc>i)
						System.out.print("Invalid account no.");
					else{
						System.out.print("Enter withdrawal amount:");
						b[acc].Withdraw(sc.nextInt());
					}
					break;
				}
				case 4:{ System.out.print("Enter account no:");
					int acc = sc.nextInt();
					if(acc>i)
						System.out.print("Invalid account no.");
					else{
						b[acc].Display();
					}
					break;
				}
				case 5: break;
				default: System.out.println("Invalid choice");
			}
		}
		while(choice != 5);
		System.out.println("exiting program");


	}
}