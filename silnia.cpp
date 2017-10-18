#include <iostream>

using namespace std;

double silnia(int n){
	if(n==0)
		return 1;
	else
		return silnia(n-1)*n;
}
int main()
{
	double n;
	cout<<"Podaj liczbę"<<endl;
	cin>>n;
    cout<<silnia(n);

	return 0;
}