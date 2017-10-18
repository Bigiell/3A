#include<iostream>
 
using namespace std;
 
int potega_i(int n,int i)
{
int  wynik=1;
while(i--)
{
wynik*=n;
}
return wynik;
}
 
int main()
{
	int n;
	int i;
cout<<"Podaj liczbe"<<endl;
cin>>n;
cout<<"Podaj potege"<<endl;
cin>>i;
 
cout<<wynik;
 
return 0;
}