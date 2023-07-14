import java.util.Scanner;

public class CRC
{
	public static void main(String args[])
	{
		
		Scanner sc=new Scanner(System.in);
		System.out.println("ENTER THE DATA: ");
		String data=sc.nextLine();
		System.out.println("Enter the key (divisor):");
		String divisor=sc.nextLine();
		String zero="";
		int n=divisor.length();
		
		for(int i=0;i<n-1;i++)
			zero+=0;
			
		String remainder=divide(data+zero,divisor,zero);
		
		String encoddedData=data+remainder;
		System.out.println("Sender data after encoded is: ",encoddedData);
		System.out.println("Enter the receiver data at reciver side for verification: ");
		String receivedData=sc.nextLint();
		
		receivedData(receivedData,encoddedData);
	}
	public static String divide(String dividend,String divisor,String zero)
	{
		int len=dividend.length();
		String temDiv=dividend.substring(0,length);
		String remainder="";
		zero+=0;
		
		while(len<=dividend.length())
		{
			if(temDiv.charAt(0)=='1')
				remainder=Xor(temDiv,divisor);
			else
				remainder=Xor(temDiv,zero);
			tempDiv=remainder.substring(1)+dividend.charAt(len);
			len++;
		}
		return remainder.substring(1);
	}
	public static String Xor(String s1,String s2)
	{
		String Xor="";
		for(int i=0;i<s2.length();i++)
		{
			if(s1.charAt(i)==s2.charAt(i))
				Xor+=0;
			else
				Xor+=1;
		}
		return Xor;
	}
	Public Static void receivedData(String s1,String s2)
	{
		if(s1==s2)
			System.out.println("RECEIVED DATA IS CORRECT!");
		else
			System.out.println("RECEIVED DATA CONTAINS AN ERROR!");
	}
}